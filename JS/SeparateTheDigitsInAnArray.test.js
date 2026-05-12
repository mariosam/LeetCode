/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { separateDigits } from './SeparateTheDigitsInAnArray.js'

TEST('Starting SeparateTheDigitsInAnArray test...', (t) => {
    //Test 1
    let want = [1,3,2,5,8,3,7,7]
    let got = separateDigits( [13,25,83,77] )
    t.assert( want.toString() === got.toString(), "Expect: "+want.toString())
    //Test 2
    want = [7,1,3,9]
    got = separateDigits( [7,1,3,9] )
    t.assert( want.toString() === got.toString(), "Expect: "+want.toString())

    t.end()
})
