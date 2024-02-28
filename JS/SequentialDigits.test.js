/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { sequentialDigits } from './SequentialDigits.js'

TEST('Starting SequentialDigits test...', (t) => {
    //Test 1
    let want = [123,234]
    let got = sequentialDigits( 100, 300 )
    t.assert( want.toString === got.toString, "Expect: "+want.toString)
    //Test 2
    want = [1234,2345,3456,4567,5678,6789,12345]
    got = sequentialDigits( 1000, 13000 )
    t.assert( want.toString === got.toString, "Expect: "+want.toString)

    t.end()
})
