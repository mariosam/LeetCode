/** 
* @version JAVA
* @author MARIO SAM <eu@mariosam.com.br>
* @see I would love to work with you instead solving web code tests: hire me!
* $ mvn clean test -Dtest=your.package.TestClassName
*/ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class BestSightseeingPairTest {

   @Test
   public void testBestSightseeingPair() throws Exception {
       //Test 1
       int want = 11;
       int got = BestSightseeingPair.maxScoreSightseeingPair( new int[]{8,1,5,2,6} );
       assertEquals(want, got);
       //Test 2
       want = 2;
       got = BestSightseeingPair.maxScoreSightseeingPair( new int[]{1,2} );
       assertEquals(want, got);
   }

}
