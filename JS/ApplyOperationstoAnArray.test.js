/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { applyOperations } from './ApplyOperationstoAnArray.js'

TEST('Starting ApplyOperationstoAnArray test...', (t) => {
    //Test 1
    let want = [1,4,2,0,0,0]
    let got = applyOperations( [1,2,2,1,1,0] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = [1,0]
    got = applyOperations( [0,1] )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
