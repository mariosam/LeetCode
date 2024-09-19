/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { largestNumber } from './LargestNumber.js'

TEST('Starting LargestNumber test...', (t) => {
    //Test 1
    let want = "210"
    let got = largestNumber( [10,2] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = "9534330"
    got = largestNumber( [3,30,34,5,9] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
  
