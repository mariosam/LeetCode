/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findErrorNums } from './SetMismatch.js'

TEST('Starting SetMismatch test...', (t) => {
    //Test 1
    let want = [2,3]
    let got = findErrorNums( [1,2,2,4] )
    t.assert( want.toString === got.toString, "Expect: "+want.toString)
    //Test 2
    want = [1,2]
    got = findErrorNums( [1,1] )
    t.assert( want.toString === got.toString, "Expect: "+want.toString)

    t.end()
})
